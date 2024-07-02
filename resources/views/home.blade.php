@extends('layouts.ap')

@section('title', 'Accueil')

@section('content')
<!-- Accueil -->
 
<section class="home" style="background-image: url('{{ asset('images/senegal.jpg') }}'); background-position: center; background-size: cover; min-height: 100vh; display: flex; align-items: flex-end; padding-left: 30%; padding-bottom: 30px;">
<div class="home-infos">
        <h1>Services pour les étudiants</h1>
        <p>Nous offrons des bourses d'études, innovantes et accréditées.</p>
        <a href="{{ route('etudiant.create')}}">Postulez pour une bourse</a>
    </div>
</section>

<!-- Services -->
<section class="services">
    <h1 class="title">NOS SERVICES</h1>
    <p class="sub-title">Notre cabinet vous propose une sélection d'universités de qualité et des
         conseils éducatifs personnalisés. Découvrez-les ci-dessous et visitez-les pour faire votre 
         choix idéal.</p>

         <div class="list-services">
    <div class="box">
        <h1><a href="{{ route('formation') }}">Univers Professionnel (Unipro)</a></h1>
        <p></p>
    </div>
    <div class="box">
    <h1><a href="{{ route('format') }}"> Haute Ecole de Management et de l'Informatique(HEMI)</a></h1>
        <p>
            </p>
    </div>
    <div class="box">
    <h1><a href="{{ route('formats') }}"> ECOLE DES HAUTES ETUDES POLYTECHNIQUES DE DAKAR(HEPO)</a></h1>
        <p></p>
    </div>
    <div class="box">
    <h1><a href="{{ route('formatse') }}"> l'Institut Professionnel pour la Sécurité Informatique(IPROSI)</a></h1>
        <p></p>
    </div>
    <div class="box">
    <h1><a href="{{ route('formatses') }}"> BEBAEMPIRE</a></h1>
        <p></p>
    </div>
</div>
    </div>
</section>

<!-- Bannière -->
<section class="banner"  style="background-image: url('{{ asset('images/etudiant1.jfif') }}'); background-position: center; background-size: cover; min-height: 100vh; display: flex; align-items: flex-end; padding-left: 30%; padding-bottom: 30px;">

</section>

<!-- Notre objectif -->
<section class="our-goal">
    <div class="left">
        <span>Nos Services</span>
        <h1>DES OBJECTIFS SPÉCIFIQUES POUR VOTRE PARCOURS SERONT DÉTERMINÉS PAR VOUS ET VOTRE CONSEILLER</h1>
    </div>
    <div class="right">
        <p>Votre réussite académique est notre priorité. Nous travaillons avec vous pour établir des objectifs clairs et atteignables, tout en vous offrant le soutien nécessaire tout au long de votre parcours.</p>
        <p>Chaque étape de votre parcours éducatif est importante. Nous vous aidons à naviguer dans les défis et à saisir les opportunités qui se présentent à vous.</p>
    </div>
</section>
@endsection


