$(document).ready(function () {
    let inProgress = false;
    let startFrom = 2;

    $('.loadmore').click(function () {
        $.ajax({
            url: '../models/loadMore.php',
            method: 'POST',
            data: {"startFrom": startFrom},
            beforeSend: function () {
                inProgress = true;
            }
        }).done(function (data) {
            data = jQuery.parseJSON(data);
            if (data.length > 0) {
                $.each(data, function (index, data) {
                    $(".content").append(`                <div class="item">
                    <a href="item.php?id=${data.id}"><img src="${data.small_src}" alt="${data.name}" title="${data.name}"></a>
                    <h3 class="item-name"><a href="item.php?id=${data.id}">${data.name}</a></h3>
                    <p class="price">${data.price}р.</p>
                    <p class="add-to-basket"><a href="#" title="Добавить в корзину">Купить</a></p>
                </div>`);
                });
                inProgress = false;
                startFrom +=2;
            }
        })
    });
});