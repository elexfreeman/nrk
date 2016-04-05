<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 17:11
 */

/*Модель для поиска по базе*/
class Nrk_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        date_default_timezone_set('Europe/London');
        $this->load->helper('url');
    }

    public function search($arg)
   // public function search()
    {
        $sql="

        SELECT DISTINCT TOP 100 f.SURNAME [SURNAME],f.NAME [NAME],f.SECNAME [SECNAME]
 ,f.birthday [BIRTHDAY],me.SNILS,a.FULLADR,
 (CASE WHEN d.sDIAGS_2 = 'F11.1'
		OR d.sDIAGS_2 = 'F12.1'
		OR d.sDIAGS_2 = 'F15.1'
		OR d.sDIAGS_2 = 'F16.1'
		OR d.sDIAGS_2 = 'F19.1' THEN 'PROFF'
		ELSE 'DISP' END) AS [GR_U],
 d.sDiags_2 [DIAG]
 FROM POLYCLINIC_2010..pold_fio f
 JOIN POLYCLINIC_2010..POLD_MEDICAL me ON f.COUNTER0=me.fio_counter AND f.LPUIN=me.fio_lpuin AND me.d_fin IS NULL
JOIN DISP..dspd_psh_medical m ON f.COUNTER0=m.fio_counter AND f.LPUIN=m.fio_lpuin AND m.d_fin IS NULL
left JOIN POLYCLINIC_2010..POLD_ADDRESS AS a ON f.LPUIN=a.FIO_LPUIN AND f.COUNTER0=a.FIO_COUNTER AND a.d_fin IS NULL AND TYPEADDRESS=1
JOIN DISP..DSPD_PSH_DIAGNOSIS AS d ON d.PSH_COUNTER = m.counter0 AND d.PSH_LPUIN = m.lpuin AND d.D_FIN IS NULL
WHERE
	f.D_FIN IS NULL
	AND d.D_DATE < GETDATE()
AND (
	   (D.sDIAGS_2 BETWEEN 'F11.2' AND 'F11.9') OR (d.sDIAGS_2 = 'F11.1')
	or (D.sDIAGS_2 BETWEEN 'F12.2' AND 'F12.9') OR (d.sDIAGS_2 = 'F12.1')
	or (D.sDIAGS_2 BETWEEN 'F15.2' AND 'F15.9') OR (d.sDIAGS_2 = 'F15.1')
	or (D.sDIAGS_2 BETWEEN 'F16.2' AND 'F16.9') OR (d.sDIAGS_2 = 'F16.1')
	or (D.sDIAGS_2 BETWEEN 'F19.2' AND 'F19.9') OR (d.sDIAGS_2 = 'F19.1')
)
  AND (m.OUTDATE IS NULL OR m.OUTDATE > GETDATE() )
   AND d.D_DATE = (SELECT MAX(D_DATE) FROM DISP..DSPD_PSH_DIAGNOSIS di
 WHERE di.PSH_COUNTER= m.COUNTER0 AND di.PSH_LPUIN=m.LPUIN AND di.D_FIN IS NULL)

 ";


$sql_where = '';

if(isset($arg['surname'])!='')
{
    $arg['surname'] = $this->security->xss_clean($arg['surname']);
    $sql_where.=" f.surname like '".$arg['surname']."' AND";
}

if(isset($arg['secname'])!='')
{
    $arg['secname'] = $this->security->xss_clean($arg['secname']);
    $sql_where.=" f.SECNAME like '".$arg['secname']."' AND";
}

if(isset($arg['name'])!='')
{
    $arg['name'] = $this->security->xss_clean($arg['name']);
    $sql_where.=" f.NAME like AND '".$arg['name']."' AND";
}

        /*1973-08-29 00:00:00*/
if(isset($arg['birthday'])!='')
{
    $arg['birthday'] = $this->security->xss_clean($arg['birthday']);
    $sql_where.=" f.birthday like '".$arg['birthday']."' AND";
}

if(isset($arg['snils'])!='')
{
    $arg['snils'] = $this->security->xss_clean($arg['snils']);
    $sql_where.=" me.snils = '".$arg['snils']."' AND";
}

if(isset($arg['address'])!='')
{
    $arg['address'] = $this->security->xss_clean($arg['address']);
    $sql_where.=" a.fulladr = '".$arg['address']."' AND";
}

        if($sql_where!='') $sql_where.=' 1=1';


        //$sql.=$sql_where." ORder by f.SURNAME,f.NAME,f.SECNAME,f.BIRTHDAY";

$sql1="
SELECT TOP 1000 *
  FROM  POLYCLINIC_2010..POLD_MEDICAL;";
        echo $sql;
        $query = $this->db->query($sql);


       // if($query===1)
        {
            return $query->result();
        }
       // else false;
    }

}