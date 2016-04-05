<div class="container">
    <?php echo form_open("auth/login", 'id="search-form"'); ?>
    <div class="panel  panel-primary search-nark-form">
        <div class="panel-heading">
            <h3 class="panel-title">�������� �� ����������</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">�������</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="���������">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">���</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="�����">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">��������</label>
                        <input type="text" class="form-control" id="secname" name="secname" placeholder="����������">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputName2">���� ��������</label>
                        <input type="text" class="form-control hasDatepicker2" id="birthday" name="birthday"
                               placeholder="01.02.1988">
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="exampleInputName2">�����</label>
                        <input type="text" class="form-control" id="snils" name="snils" placeholder="123456789">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputName2">����� ����������</label>
                        <input type="text" class="form-control" id="address" name="address"
                               placeholder="������, ������� 78">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="button" onclick="nark.Search()" class="btn  btn-success">�����</button>
                    <button type="reset"  class="btn  btn-danger">��������</button>
                </div>
            </div>

        </div>
    </div>
    </form>

    <div id="loader" style="display: none;">
        <img src="images/loader.GIF" style="display: block;width: 100px;margin: 0 auto;">
    </div>
    <div class="panel  panel-success results">
        <div class="panel-heading">
            <h3 class="panel-title">���������� ������</h3>
        </div>

        <div class="panel-body results-area">

        </div>
    </div>


</div>



