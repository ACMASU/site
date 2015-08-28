<form class="pure-form-stacked pure-u-1-2" action="/Member/create" method="POST">
    <fieldset>
        <legend>Sign Up for ACM</legend>
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" required/>

        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" required/>

        <label for="email">Email</label>
        <input type="email" name="email" required/>

        <label for="major">Major</label>
        <input type="text" name="major" required/>

        <input class="pure-button pure-button-primary" type="submit" value="Submit"/>
    </fieldset>
</form>

