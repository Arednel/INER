<link rel="stylesheet" href={{ asset('css/login.css') }}>
<link rel="stylesheet" href={{ asset('css/input-anim.css') }}>

<div class="about">
    <div class="container">
        <div class="row templatemo_about_wrapper">
            <div class="col-md-12 gradient">
                <div class="templatemo_about">

                    <div class="templatemo_about_title">Добро пожаловать!</div>
                    <br>
                    <div class="templatemo_about_subtitle">Пожалуйста, войдите в свою учетную запись</div>

                    <form method="POST" action="/Login" class="form">

                        @csrf

                        <div class="form-item">
                            <label class="form-item__title">Email</label>
                            <div class="form-item__input">
                                <input type="email" placeholder="Введите Email" value="{{ old('email') }}"
                                    name="email" autocomplete="email" required>
                                <span class="focus-input-1"></span>
                                <span class="focus-input-2"></span>
                            </div>
                            @error('email')
                                <div class="form-item__error show">
                                    <p>{{ $message }}</p>
                                </div>
                            @else
                                <div class="form-item__error"></div>
                            @enderror
                        </div>

                        <div class="form-item">
                            <label class="form-item__title">Пароль</label>
                            <div class="form-item__input">
                                <input type="password" placeholder="Введите пароль" name="password"
                                    autocomplete="current-password" required>
                                <span class="focus-input-1"></span>
                                <span class="focus-input-2"></span>
                            </div>
                            <div class="form-item__error" id='password_error'>
                                <p></p>
                            </div>
                        </div>

                        <button class="blue-btn form-item__btn" type="submit">Войти</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
