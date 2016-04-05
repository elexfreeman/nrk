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
                </div>
            </div>

        </div>
    </div>
    </form>

    <div class="panel  panel-success results">
        <div class="panel-heading">
            <h3 class="panel-title">���������� ������</h3>
        </div>

        <div class="panel-body results-area">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>



