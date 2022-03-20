<article style="text-align: center;">
    <h2>Свяжитесь со мной</h2>
    <p>Расскажите о своих пожеланиях, и я с вами свяжусь в течение двух часов для назначения встречи</p>
    <form action="/contact.php" method="POST" enctype="multipart/form-data">
        <div style="width: 50%; margin: 0 auto;">
            <div class="form-group">
                <label for="username"></label>
                <input type="text" id="username" name="username" placeholder="Имя" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone"></label>
                <input type="tel" id="phone" name="phone" placeholder="+7 900 000-00-00" class="form-control">
            </div>
            <div class="form-group">
                <label for="comment"></label>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Comment" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn__common" style="display: block; width: 100%;padding: 1%; cursor: pointer;">Отправить</button>
        </div>
    </form>
</article>