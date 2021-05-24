<!-- This is the modal with the outside close button -->
<div id="modal-ketqua-outside" class="uk-text-center modal__ketqua" uk-modal>
    <div class="uk-modal-dialog uk-modal-body modal__body">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-text-center">
            <div class="canvas-holder uk-position-relative uk-display-inline-block">
                <canvas id="canvas" width="420" height="420"></canvas>
                <div class="uk-position-center uk-text-center">
                    <div id="canvas-data" class="modal__ketqua__txt1">90%</div>
                    <div class="modal__ketqua__txt2">Công việc <br>
                        của một lập trình viên <br>
                        rất phù hợp với bạn!</div>
                </div>
            </div>
        </div>
        <p class="modal__ketqua__desc">Bạn có tố chất và thái độ cần thiết để thành công với tư cách là một kỹ sư phần mềm. Bạn sở hữu óc tư duy phân tích thiên bẩm, không bị nhụt chí trước những vấn đề khó khăn và sẵn sàng đầu tư thời gian để cập nhật kỹ năng của mình. Bạn nên nghiêm túc xem xét phát triển sự nghiệp trong lĩnh vực này!</p>
        <a href="" class="uk-button uk-button-default modal__ketqua__btnShare"><span uk-icon="icon: facebook; ratio: 1"></span> Share kết quả</a>
    </div>
</div>
<script>
    var canvas = document.getElementById('canvas');
    var colors = ['#2b71eb', '#2b7eea', '#2aa9e8'];
    var circleProgressBar = new CircleProgressBar(canvas, {
        colors: colors,
        radius: 200,
        trackLineColor: '#e6e7e8',
    });
    circleProgressBar.setValue(0.9);
</script>