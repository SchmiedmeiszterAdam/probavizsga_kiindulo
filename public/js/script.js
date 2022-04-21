$(function() {
    const token = $('meta[name="csrf-token"]').attr('content');
    const ajax = new Ajax(token)
    const szakdogak = []
    ajax.getAjax("/szakdogak", szakdogak, dogakMegjelentese)

    function dogakMegjelentese(tomb) {
        tomb.forEach(element => {
            let elem = $("<tr class ='szakdoga'></tr>").appendTo($("#szakdogak"))
            new Szakdoga(elem, element)
        });
    }
    $(window).on("torles", function(event) {
        ajax.deleteAjax("/szakdogak", event.detail.id)
    })
    $(window).on("modositas", function(event) {
        let id = event.detail.id
        const inputok = $(".ujadat .beviteli")
        for (let i = 0; i < inputok.length; i++) {
            const element = inputok[i];
            $(element).val(event.detail.adat[$(element).attr("id")])
        }
        $("#modosit").unbind()
        $("#modosit").on("click", function() {
            let adat = adatlekeres()
            console.log(adat, id)
            ajax.putAjax("/szakdogak", adat, id)
        })
    })

    $("#uj").on("click", function() {
        let adat = adatlekeres()
        console.log(adat)
        ajax.postAjax("/szakdogak", adat)
    })

    function adatlekeres() {
        const adat = {}
        const inputok = $(".ujadat .beviteli")
        for (let i = 0; i < inputok.length; i++) {
            const element = inputok[i]
            let json = '{ "' + $(element).attr("id") + '" : "' + $(element).val() + '"}'
            let obj = jQuery.parseJSON(json)
            $.extend(adat, obj)

        }
        return adat
    }
})