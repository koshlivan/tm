
        <div class="wraper">
            <div class="reg-wind">
                <form id="log_form" action="functionality/auth.php" method="post">
                    <input type="hidden" name="FormLogin" >
                <div class="field-set">
                    <div class="row align-items-center field">
                    <label for="inpLog" class="col-3">Login</label>
                    <input type="text" name="inpLog" class="col-7" required>
                    </div>
                </div>
                    <div class="row align-items-center field">
                    <label for="inpPass" class="col-3">Pass</label>
                    <input type="password" name="inpPass" class="col-7" required>
                    </div>

                <div>
                    <div class="row align-items-center field">
                    <?php if($_SESSION['message']){
                        echo "<p style='font-weight: bold; color: red; text-transform: Capitalize'>".$_SESSION['message']."</p>";
                        unset($_SESSION['message']);
                    }?>
                    <input type="submit" name="btnSubmit" id="btnSubm" value="Submit">
                    </div>
                </div>
                </form>
            </div>
        </div>
    