@extends('main')

@section('body')

<div class="container">
    <div class="row">
        <div class="signup">
            <h2>Register</h2>
            <p>Please fill this form to create an account</p>
            <form action="" method="post">
                <div class="formgroup">
                    <label>Full Name</label>
                    <input type="text" name="name" class="formcontrol" required>
                </div>

                <div class="formgroup">
                    <label>Email Address</label>
                    <input type="email" name="email" class="formcontrol" required>
                </div>
                <div class="formgroup">
                    <label>Password</label>
                    <input type="password" name="password" class="formcontrol" required>
                </div>
                <div class="formgroup">
                    <label>Comfirm Password</label>
                    <input type="password" name="comfirm-password" class="formcontrol" required>

                </div>
                <div class="formgroup">
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
                <p>Already have an account? <a href="/login">Login here</a>.</p>
            </form>
        </div>
    </div>
</div>



@endsection