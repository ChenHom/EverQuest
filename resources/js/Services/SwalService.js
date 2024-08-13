import Swal from "sweetalert2";

const sweet = {
    // 基本的 Alert
    alert(message, title = '提示', icon = 'info') {
        return Swal.fire({
            title: title,
            text: message,
            icon: icon,
            confirmButtonText: '確定'
        })
    },

    // 確認框
    confirm(message, title = '確認', confirmButtonText = '確定', cancelButtonText = '取消') {
        return Swal.fire({
            title: title,
            text: message,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText
        })
    },

    // 自訂表單
    form(options) {
        return Swal.fire({
            ...options
        })
    }
}

export default sweet;
