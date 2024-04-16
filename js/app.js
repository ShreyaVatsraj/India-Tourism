function loadMap() {
    $(document).ready(function () {
        var tooltipSpan = document.getElementById('details-box');

        document.addEventListener('mouseover', function (e) {
            if (e.target.tagName == 'path') {

                var content = e.target.getAttribute("title");

                document.getElementById("details-box").innerHTML = content;
                document.getElementById("details-box").style.opacity = "100%";
            }
            else {
                document.getElementById("details-box").style.opacity = "0%";
            }
        });

        document.addEventListener('click', function (e) {
            if (e.target.tagName == 'path') {

                var stateId = e.target.getAttribute('data-id');
                $.get({
                    url: 'state-details.php?id=' + stateId,
                    success: function (response) {
                        $("#state-data").html(response);
                    }
                });
            }
        });

        window.onmousemove = function (e) {
            var x = e.clientX,
                y = e.clientY;
            tooltipSpan.style.top = (y + 20) + 'px';
            tooltipSpan.style.left = (x) + 'px';
        };
    });
}

function search(element) {
    $.ajax({
        url: './search.php?query=' + element.value,
        method: 'GET',
        success: function (response) {
            $("#state-data").html(response);
        }
    });
}