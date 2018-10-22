<?php include('inc/header.php') ?>
    <header class="page-header">
        <h1>
            CONTACT
        </h1>    
    </header>
    <main class="page-body">
        <form action="submit-contact.php" method="POST">
            <h3>Send us a message:</h3>
            <input name="name" type="text" required placeholder="Name"/>
            <input name="email" type="email" required placeholder="Email"/>
            <textarea name="message" id="contactText" placeholder="Message"></textarea>
            <button name="submit" id="formSubmit" type="submit">Send</i></button>
        </form>
    </main>

<script src="./js/index.js"></script>
<?php include('inc/footer.php') ?>