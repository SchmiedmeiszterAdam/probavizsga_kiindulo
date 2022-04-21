class Ajax {
    constructor(token) {
        this.token = token
    }
    getAjax(apivegpont, tomb, myCallBack) {
        tomb = [];
        $.ajax({
            url: apivegpont,
            type: "GET",
            success: (result) => {
                result.forEach((element) => {
                    tomb.push(element);
                });
                myCallBack(tomb);
            }
        });
    }
    postAjax(apivegpont, adat) {
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apivegpont,
            type: "POST",
            data: adat,
            success: function() {
                window.location.reload();
            }
        });
    }

    deleteAjax(apivegpont, id) {
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apivegpont + "/" + id,
            type: "DELETE",
            success: function() {
                window.location.reload();
            }
        });
    }

    putAjax(apivegpont, adat, id) {
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apivegpont + "/" + id,
            type: "PUT",
            data: adat,
            success: function() {
                // window.location.reload();
            }
        });
    }
}