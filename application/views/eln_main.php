<div class="container">
    <?php echo form_open("auth/login", 'id="search-form"'); ?>
    <div class="panel  panel-primary search-nark-form">
        <div class="panel-heading">
            <h3 class="panel-title">Проверка на наркологию</h3>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">Фамилия</label>
                        <input type="text" class="form-control" id="surname" name="surname" placeholder="Помидоров">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">Имя</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Антон">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputName2">Отчество</label>
                        <input type="text" class="form-control" id="secname" name="secname" placeholder="Валерьевич">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="exampleInputName2">Дата рождения</label>
                        <input type="text" class="form-control hasDatepicker2" id="birthday" name="birthday"
                               placeholder="01.02.1988">
                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="form-group">
                        <label for="exampleInputName2">Снилс</label>
                        <input type="text" class="form-control" id="snils" name="snils" placeholder="123456789">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputName2">Место жительства</label>
                        <input type="text" class="form-control" id="address" name="address"
                               placeholder="Самара, Садовая 78">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="button" onclick="nark.Search()" class="btn  btn-success">Поиск</button>
                </div>
            </div>

        </div>
    </div>
    </form>

    <div class="panel  panel-success results">
        <div class="panel-heading">
            <h3 class="panel-title">Результаты поиска</h3>
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



