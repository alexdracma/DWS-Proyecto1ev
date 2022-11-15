<?php
    require_once 'partials/menu.part.php';
?>

<div class="row" id="contactForm">
    <div class="col-lg-6">
        <h1 class="p-4">Contáctanos</h1>
        <form action="" method="post" class="text-start p-4">
            <div class="mb-2 row">
                <div class="col-12">
                    <input type="text" class="form-control" id="contactFullName" placeholder="Nombre completo" name="fullName" value="<?php echo $form->fullName;?>" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-lg-7 pe-lg-2">
                    <input type="email" class="form-control" id="contactEmail" placeholder="Email" name="email" value="<?php echo $form->email;?>" required>
                </div>
                <div class="d-block d-lg-none mb-2"></div>
                <div class="col-lg-5 ps-lg-0">
                    <input type="tel" class="form-control" id="contactPhoneNum" placeholder="Teléfono" name="phone" value="<?php echo $form->phone;?>" required>
                </div>
            </div>
            <div class="mb-2 row">
                <div class="col-12 mb-2">
                    <input type="text" class="form-control" id="contactSubject" placeholder="Asunto" name="about" value="<?php echo $form->about;?>" required>
                </div>
                <div class="col-12">
                    <textarea class="form-control" placeholder="Mensaje" id="contactTextArea" name="message" required><?php echo $form->message;?></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Enviar mensaje</button>
        </form>
    </div>

    <!--right side-->
    <div class="d-none d-lg-block col-lg-6">
        <img src="../assets/images/contactSection.png" class="w-100 d-block">
    </div>
</div>
<?php
    require_once 'partials/footer.part.php';
?>
</div>
</div>
</body>

</html>