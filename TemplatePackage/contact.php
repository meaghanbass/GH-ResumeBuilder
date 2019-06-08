<form name="htmlform" method="post" action="html_form_send.php">
    <div class="form-group">
        <label for="first_name" class="mt-4">Name</label>
		<input type="text" class="form-control" id="name" name="name">

        <label for="email" class="mt-4">Email Address</label>
        <input type="email" class="form-control" id="email" name="email">

        <label for="message" class="mt-4">Message</label>
        <textarea id="message" class="form-control" name="message"></textarea>

        <input type="submit" class="btn btn-nebula mt-5" name="contact_submit" value="Submit">
    </div>
