<div class="container">

    <?php echo form_open("auth/login");?>
    <div class="panel  panel-primary login-form">
        <div class="panel-heading">
            <h3 class="panel-title">�������� �� ����������</h3>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label for="exampleInputEmail1">�����</label>
                <input type="text" class="form-control" id="login" name="username" placeholder="��� ��� ���" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">������</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="������" required>
            </div>

            <button type="submit" class="btn btn-default">�����</button>
        </div>
    </div>
    </form>
</div>
