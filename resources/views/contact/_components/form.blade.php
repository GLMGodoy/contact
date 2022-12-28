    <input type="text" name="name" value="{{ $contact->name ?? old('name') }}" placeholder="Name">
    {{ $errors->has('name') ? $errors->first('name') : '' }}
    </br>
    <input type="text" name="contact" value="{{ $contact->contact ?? old('contact') }}" placeholder="Contact">
    {{ $errors->has('contact') ? $errors->first('contact') : '' }}
    </br>
    <input type="text" name="email" value="{{ $contact->email ?? old('email') }}" placeholder="E-mail">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    </br>
    <button type="submit">Register</button>
</form>