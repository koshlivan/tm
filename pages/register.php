
        <div>
            <div class="reg-wind">
                <form id="reg_form" action="functionality/reg.php" method="post">
                    <div class="field-set">
                        <div class="row align-items-center field">
                            <label for="inpLog" class="col-3">Login</label>
                            <input type="text" name="inpLog" class="col-7 ml-2">
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpEmail" class="col-3">Email</label>
                            <input type="email" name="inpEmail" class="col-7">
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpPass" class="col-3">Pass</label>
                            <input type="password" name="inpPass" class="col-7">
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpRePass" class="col-3">Repeat pass</label>
                            <input type="password" name="inpRePass" class="col-7">
                        </div>
                    </div>
                    <div>
                        <div class="row align-items-center">
                        <?php if($_SESSION['message']){
                            echo "<p style='font-weight: bold; color: red; text-transform: Capitalize' class='col-7'>".$_SESSION['message']."</p>";
                            unset($_SESSION['message']);
                        }?>
                        <input type="submit" name="btnSubmit" id="btnSubm" value="Submit" class="col">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    