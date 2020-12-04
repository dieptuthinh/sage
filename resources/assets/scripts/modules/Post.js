export class Post {
    constructor() {
        this.$amountPlus = $('#amount-plus')
        this.$amountMinus = $('#amount-minus')
        this.$amount = $('#amount')
        this.$soldText = $('#sold-text')
        this.$inventoryText = $('#inventory-text')
        this.$productIdText = $('#product-id')
    }
    init() {
        if (this.$amountPlus.length) {
            this.addEventBtn(this.$amountPlus)
        }
        if (this.$amountMinus.length) {
            this.addEventBtn(this.$amountMinus, false)
        }
        this.addEventInput()
        this.testAjax()
    }
    addEventBtn($el, plus = true) {
        $el.on('click', () => {
            let val = +this.$amount.val()
            if (plus) {
                if (val < +this.$amount.attr('max')) {
                    this.$amount.val(val + 1)
                }
            } else {
                if (val > 1) {
                    this.$amount.val(val - 1)
                }
            }
        })
    }
    addEventInput() {
        this.$amount.on('focusin', function() {
            $(this).data('val', $(this).val())
        }).on('input', function() {
            if (+$(this).val()) {
                $(this).val(+$(this).val())
                if (+$(this).val() < 1) {
                    $(this).val(1)
                } else if (+$(this).val() > +$(this).attr('max')) {
                    $(this).val($(this).attr('max'))
                }
                $(this).data('val', $(this).val())
            } else {
                $(this).val($(this).data('val'))
            }
        })
    }
    testAjax() {
        $('#sell-now-btn').on('click', () => {
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: {
                    action: 'buy_product',
                    id: this.$productIdText.val(),
                    amount: +this.$amount.val(),
                },
                success: (data) => {
                    // console.log(data);
                    this.$soldText.text((i, cur) => +cur + data.amount)
                    this.$inventoryText.text((i, cur) => +cur - data.amount)
                    this.$amount.attr('max', this.$inventoryText.text())
                    alert('Successful purchase');
                },
                error: (err) => {
                    alert(err.responseJSON.message);
                },
            })
        })
    }
}

export default new Post().init()