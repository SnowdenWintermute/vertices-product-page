<?php include('inc/header.php') ?>
<div id="nav-bottom-border"></div>
    <header class="page-header" id="contact-header">
        <h1>
            CONTACT
        </h1>    
    </header>
    <main class="page-body">
        <section class="main-section">
        <form action="submit-contact.php" method="POST">
            <h3>SEND US A MESSAGE</h3>
            <label for="name">Name:</label>
            <input name="name" type="text" required placeholder="Name"/>
            <label for="email">Email Address:</label>
            <input name="email" type="email" required placeholder="Email"/>
            <label for="message">Message:</label>
            <textarea name="message" id="contactText" placeholder="Message"></textarea>
            <button name="submit" id="formSubmit" type="submit">Send</i></button>
        </form>
        </section>
    </main>

<script src="./js/index.js"></script>
<?php include('inc/footer.php') ?>