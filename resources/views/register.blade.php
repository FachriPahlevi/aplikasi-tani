@extends('layouts.index')
@section('cotent')
<main>
    <div class="col-lg-6 col-md-12">
                        <div class="account-sign-up">
                            <h5 class="text-center">Sign up</h5>
                            <form action="#">
                                <div class="form__div">
                                    <input type="text" class="form__input" placeholder=" ">
                                    <label for="" class="form__label">Full Name</label>
                                </div>
                                <div class="form__div">
                                    <input type="email" class="form__input" placeholder=" ">
                                    <label for="" class="form__label">Email</label>
                                </div>
                                <div class="form__div">
                                    <input type="password" class="form__input" placeholder=" ">
                                    <label for="" class="form__label">Password</label>
                                </div>
                                <div class="form__div mb-0">
                                    <input type="password" class="form__input" placeholder=" ">
                                    <label for="" class="form__label">Repeat Password</label>
                                </div>
                                <div class="password-info-show">
                                    <input type="checkbox" id="showpassagain" class="mb-0">
                                    <label for="showpassagain" class="mb-0">Show Password</label>
                                </div>
                                <a href="verify.html" class="btn bg-primary">Sign Up</a>
                            </form>
                        </div>
                    </div>
</main>
@endsection