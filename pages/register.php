
        <div>
            <div class="reg-wind">
                <form id="reg_form" action="functionality/reg.php" method="post">
                    <div class="field-set">
                        <div class="row align-items-center field">
                            <label for="inpLog" class="col-5">Login</label>
                            <input type="text" name="inpLog" class="col-6 ml-2" required>
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpEmail" class="col-5">Email</label>
                            <input type="email" name="inpEmail" class="col-6" required>
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpPass" class="col-5">Pass</label>
                            <input type="password" name="inpPass" class="col-6" required>
                        </div>
                        <div class="row align-items-center field">
                            <label for="inpRePass" class="col-5">Repeat pass</label>
                            <input type="password" name="inpRePass" class="col-6" required>
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
    