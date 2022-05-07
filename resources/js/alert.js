window.addEventListener("livewire-toastr", function(event){
    toastr.options = {
       closeButton: true,
       progressBar: true,
	   preventDuplicates: true,
       positionClass: "toast-top-center"      
    };

    toastr[event.detail.type](event.detail.message, event.detail.title ?? '');
});
