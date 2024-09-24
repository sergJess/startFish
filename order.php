
    <?php include 'header.php';?>

    </header>
    <section class="order" id="order">
        <div class="container">
            <div class="order_wrap">
                <div class="order_products">
                    <div class="order_product">
                        <div class="order_product_img">
                            <img src="img/types-1.jpg">
                        </div>
                        <div class="order_product_info">
                            <p class="order_product_text">
                                Мы осуществляем изготовление весх типов печатей. В наличии широкий ассортимент цветов оснасток от стандартных до кислотно-ярких и золотых. В цветных печатях может быть использовано 2 цвета.
                            </p>
                            <h4 class="order_product_name">
                                Тип печати
                            </h4>
                            <div class="templates_categories order_product_types">
                                <div class="templates_category active">
                                    Автоматическая
                                </div>
                                <div class="templates_category">
                                    Карманная
                                </div>
                                <div class="templates_category">
                                    ручная 
                                </div>
                                <div class="templates_category">
                                    Комплект печатей
                                </div>
                            </div>
                            <h4 class="order_product_name">
                                Цвет печати
                            </h4>
                            <div class="colors">
                                <div class="colors_item blue active"></div>
                                <div class="colors_item black"></div>
                            </div>
                        </div>
                    </div>
                    <div class="order_product coloring">
                        <div class="order_product_img">
                            <img src="img/types-1.jpg">
                        </div>
                        <div class="order_product_info">
                            <h4 class="order_product_name">
                                Цвет оснастки
                            </h4>
                            <div class="colors">
                                <div class="colors_item active" style="background: #BFFB5B;"></div>
                                <div class="colors_item" style="background: #7FF950;"></div>
                                <div class="colors_item" style="background: #F2A83B;"></div>
                                <div class="colors_item" style="background: #F19135;"></div>
                                <div class="colors_item" style="background: #EB4CAF;"></div>
                                <div class="colors_item" style="background: #C0C0C0;"></div>
                                <div class="colors_item" style="background: #F9D749;"></div>
                                <div class="colors_item" style="background: #C28242;"></div>
                                <div class="colors_item" style="background: #406439;"></div>
                                <div class="colors_item" style="background: #F6F154;"></div>
                                <div class="colors_item" style="background: #EA3223;"></div>
                                <div class="colors_item" style="background: #BB271A;"></div>
                                <div class="colors_item" style="background: #8C1A11;"></div>
                                <div class="colors_item" style="background: #8C1A11;"></div>
                                <div class="colors_item" style="background: #7E28F5;"></div>
                                <div class="colors_item" style="background: #001EF5;"></div>
                                <div class="colors_item" style="background: #43107D;"></div>
                                <div class="colors_item" style="background: #000A7B;"></div>
                                <div class="colors_item" style="background: #000000;"></div>
                                <div class="colors_item white" style="background: #FFFFFF;"></div>
                            </div>
                        </div>
                    </div>
                    <button class="order_product_btn">
                        Добавить печать
                    </button>
                </div>
                <div class="order_form">
                    <div class="order_form_item">
                        <h4 class="order_form_name">
                            Данные для макета печати
                        </h4>
                        <input type="text" class="order_input" placeholder="ОГРН">
                        <input type="text" class="order_input" placeholder="ИНН">
                        <input type="text" class="order_input" placeholder="ФИО">
                        <input type="text" class="order_input" placeholder="город ведения деятельности">
                        <input type="text" class="order_input" placeholder="Загрузить изображение">
                        <textarea class="order_input" placeholder="Комментарий"></textarea>
                    </div>
                    <div class="order_form_item">
                        <h4 class="order_form_name">
                            Данные для отправки
                        </h4>
                        <div class="order_radio">
                            <div class="order_radio_item">
                                <input type="radio" id="radio1" name="radio1" checked>
                                <label for="radio1">
                                    СДЭК
                                </label>
                            </div>
                            <div class="order_radio_item">
                                <input type="radio" id="radio2" name="radio1">
                                <label for="radio2">
                                    Почта России
                                </label>
                            </div>
                        </div>
                        <input type="text" class="order_input" placeholder="Фамилия">
                        <input type="text" class="order_input" placeholder="Имя">
                        <input type="text" class="order_input" placeholder="ФИО">
                        <input type="text" class="order_input" placeholder="Отчество">
                        <input type="text" class="order_input" placeholder="Адрес пункта выдачи заказов">
                        <input type="text" class="order_input" placeholder="телефон">
                        <div class="order_form_delivery">
                            Доставка 150 ₽ входит в стоимость заказа
                        </div>
                        <div class="order_form_bottom">
                            <div class="order_form_price">
                                3 550 ₽ 
                            </div>
                            <div class="order_form_btn">
                                Заказать печать
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php';?>