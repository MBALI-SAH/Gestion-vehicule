
 {{--Si boutton "modifier_vehicule est à true on affiche la page de creation"   --}}
@if ($afficher_page_modifier)

  {{-- Modifier un nouveau vehicule --}}
  @include('livewire.modifier-vehicule')

@else
  
  @include('livewire.liste-vehicule')

@endif
