<label for="first_name">First name:</label><br>
<input type="text" id="first_name" name="first_name" value="{{ $user->first_name ?? ' ' }}"><br>
<label for="last_name">Last name:</label><br>
<input type="text" id="last_name" name="last_name" value="{{ $user->last_name ?? ' ' }}"><br>

<label for="email">Email:</label><br>
<input type="text" id="email" name="email" value="{{ $user->email ?? ' ' }}"><br>

<label for="phone">Phone:</label><br>
<input type="text" id="phone" name="phone" value="{{ $user->phone ?? ' ' }}"><br>

<label for="priority">Priority:</label><br>
<input type="text" id="priority" name="priority" value="{{ $user->priority ?? ' ' }}"><br>
<input type="submit" value="Submit">