<section class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.479948774453!2d22.005476891663736!3d49.191454193992584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ea90012afb6f5%3A0xcf720b13b78d35bc!2sPenzi%C3%B3n%20ZAYDA!5e0!3m2!1ssk!2ssk!4v1755863012151!5m2!1ssk!2ssk"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<footer>
    <div class="bg-img">
        <img src="{{asset('images/footer/alpacas.svg')}}" alt="alpaca">
    </div>
    <div class="container">
        <div class="title">
            <h3>kontaktujte nás <span>máte na nás otázku?</span></h3>
            <div class="logo-wrap">
                <img src="{{asset('images/footer/logo-white.svg')}}" alt="logo">
            </div>
        </div>
        <div class="box">
            <div class="item">
                <form action="">
                    <div class="input-wrap">
                        <label for="name">vaše celé meno</label>
                        <input id='name' type="text" name="name">
                    </div>
                    <div class="input-wrap">
                        <label for="email">mailová adresa</label>
                        <input id='email' type="email" name="email">
                    </div>
                    <div class="input-wrap">
                        <label for="message">správa</label>
                        <textarea name="contactMessage"></textarea>
                    </div>
                </form>
            </div>
            <div class="item">
                <p>Výrava 122 <br> 67 16 Výrava</p>
                <p><span>0917 750 405</span></p>
                <p class="mail">vyrava122@gmail.com</p>
                <div class="socials">
                    <a href="">
                        <img src="{{asset('images/footer/ig.svg')}}" alt="logo">
                    </a>
                    <a href="">
                        <img src="{{asset('images/footer/fb.svg')}}" alt="logo">
                    </a>
                    <a href="">
                        <img src="{{asset('images/footer/linkedin.svg')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="btn">
            <a href="">rezervácia</a>
        </div>
    </div>
</footer>
