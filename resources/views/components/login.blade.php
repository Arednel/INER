<div class="clear"></div>
<div class="content about" id="menu-3">
    <div class="container">
        <div class="row templatemo_about_wrapper">
            <div class="col-md-12 gradient">
                <div class="templatemo_about">
                    <div class="templatemo_about_title">Добро пожаловать!</div>
                    <div class="templatemo_about_subtitle">Пожалуйста, войдите в свою учетную запись</div>

                    <form method="POST" action="/Login" class="form">

                        @csrf

                        <div class="form-item">
                            <label class="form-item__title">Логин</label>
                            <div class="form-item__input">
                                <input type="Логин" placeholder="Введите логин" value="{{ old('login') }}"
                                    name="login" autocomplete="login" required>
                                <span class="focus-input-1"></span>
                                <span class="focus-input-2"></span>
                            </div>
                            @error('login')
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
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
