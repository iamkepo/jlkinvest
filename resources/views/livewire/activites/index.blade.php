<div wire:ignore.self>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.activites.create")
    @endif
    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.activites.edit")
    @endif
    @if ($currentPage == PAGELIST)
        @include("livewire.activites.liste")
    @endif
</div>

<script>

    window.addEventListener("showSuccessMessage", event =>{
        Swal.fire({
            position: 'top-end',
            icon:'success',
            toast:true,
            title: event.detail.message || "Opération éffectuée avec succès",
            showConfirmButton: false,
            timer:5000
        })
    })

    window.addEventListener("showConfirmeMessage", event =>{
      Swal.fire({
          title: event.detail.message.title,
          text: event.detail.message.text,
          icon: event.detail.message.type,
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Continuer',
          cancelButtonText: 'Annuler'
          }).then((result) => {
          if (result.isConfirmed) {
            @this.deleteActivite(event.detail.message.data.Activite_id)
          }
      })
    })


</script>
