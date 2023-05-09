<script>
    function alert(type,msg)
    {
        let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');

        element.innerHTML = `
                    <div class="alert ${bs_class} alert-dismissable fade show custom-alert d-flex justify-content-between align-items-center" role="alert">
                        <strong class="me-3">${msg}</strong> 
                        <button 
                            type="button" 
                            class="btn-close" 
                            data-bs-dismiss="alert"
                            aria-label="close">
                        </button>
                    </div>
        `;
        document.body.append(element);
    }
</script>