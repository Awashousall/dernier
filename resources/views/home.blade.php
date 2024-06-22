@extends('layouts.ap')

@section('title', 'Accueil')

@section('content')
<!-- Accueil -->
 
<section class="home" style="background-image: url('{{ asset('https://www.terresdemontaigu.fr/wp-content/uploads/2019/12/Illustration-%C3%89tudiants-jeunes-actifs-Terres-de-Montaigu.jpg') }}'); background-position: center; background-size: cover; min-height: 100vh; display: flex; align-items: flex-end; padding-left: 30%; padding-bottom: 30px;">
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
        <h1><a href="{{ route('formation') }}">Université Dakar Bourguiba (UDB)</a></h1>
        <p>L'Université Dakar Bourguiba (UDB) offre des programmes dans divers domaines tels que
            les sciences économiques et de gestion, les sciences juridiques et politiques, 
            les sciences et technologies, et les lettres et sciences humaines. 
            Elle propose des niveaux d'études allant de la Licence au Doctorat.
            L'université met l'accent sur la professionnalisation, 
            avec des partenariats avec le secteur privé et des stages intégrés.</p>
    </div>
    <div class="box">
        <h1>L'Institut Africain de Management (IAM)</h1>
        <p>L'Institut Africain de Management (IAM) propose des programmes dans divers domaines
            tels que le management, les sciences économiques et de gestion, l'informatique et 
            les technologies de l'information, les sciences politiques, et les relations internationales.
            Les niveaux d'études disponibles sont la Licence, le Master et le Doctorat.
            L'institut met un fort accent sur l'innovation et l'entrepreneuriat, 
            avec des cours adaptés aux besoins du marché.
            </p>
    </div>
    <div class="box">
        <h1>Université Amadou Hampâté Bâ (UAHB)</h1>
        <p>L'Université Amadou Hampâté Bâ (UAHB) est une institution d'enseignement supérieur située en
            Afrique de l'Ouest, au Mali. 
            Elle propose une gamme variée de programmes académiques et de formations professionnelles.
            L'UAHB est réputée pour son engagement envers l'éducation et la recherche,
            notamment dans les domaines des sciences sociales, des sciences économiques 
            et de gestion, des sciences exactes et techniques, ainsi que des lettres et sciences 
            humaines. L'université s'efforce de promouvoir l'excellence académique et offre des
            diplômes allant de la Licence au Doctorat. Elle encourage également la collaboration 
            avec le secteur privé et la mise en œuvre de stages intégrés pour assurer 
            la professionnalisation des étudiants.</p>
    </div>
    <div class="box">
        <h1>Université du Sahel (USSEIN)</h1>
        <p>L'Université du Sahel (USSEIN) est une institution d'enseignement supérieur basée dans la 
            région du Sahel. Elle se distingue par son engagement envers l'éducation et la recherche 
            dans divers domaines tels que les sciences économiques et de gestion, les sciences juridiques
            et politiques, les sciences et technologies, ainsi que les sciences humaines et sociales. 
            L'USSEIN propose des programmes académiques allant de la Licence au Doctorat, 
            avec un accent particulier sur la promotion de la recherche appliquée et de l'innovation.
            L'université encourage la collaboration avec le secteur privé et les organisations 
            internationales pour enrichir l'expérience académique des étudiants et favoriser leur
            employabilité à travers des stages et des projets collaboratifs..</p>
    </div>
    <div class="box">
        <h1>Université Gaston Berger (UGB)</h1>
        <p>L'Université Gaston Berger (UGB), située au Sénégal, est renommée pour son excellence académique et son engagement envers le développement social et économique du pays. Elle offre une large gamme de programmes dans des domaines tels que les sciences économiques et de gestion, les sciences juridiques et politiques, les sciences et technologies, ainsi que les lettres et sciences humaines. L'UGB accorde une grande importance à la professionnalisation des étudiants à travers des partenariats avec le secteur privé, des stages intégrés et des opportunités de développement de compétences pratiques. L'université vise à former des leaders et des professionnels qualifiés, prêts à contribuer positivement à la société et au marché du travail.</p>
    </div>
    <div class="box">
        <h1>Université Internationale de Dakar (UID)</h1>
        <p>L'Université Internationale de Dakar (UID) est une institution privée qui offre une éducation de qualité dans divers domaines académiques. UID se concentre sur la gestion, les sciences sociales, les technologies de l'information, le droit, et d'autres disciplines pertinentes pour le développement économique et social du Sénégal. L'université met un accent particulier sur l'internationalisation de l'enseignement à travers des partenariats avec des institutions éducatives internationales, offrant ainsi aux étudiants des opportunités d'acquérir une perspective mondiale et des compétences interculturelles..</p>
    </div>
</div>

    </div>
</section>

<!-- Bannière -->
<section class="banner"  style="background-image: url('{{ asset('https://th.bing.com/th/id/R.e8fbfe5040278c26410f0b700e6d9797?rik=EweK2xRGws3JzQ&riu=http%3a%2f%2fwww.les-gouv.com%2fimages%2farticle%2fmes-services-etudiant-gouv-fr.jpg&ehk=B%2fuozfosrMih2VKzjyeV5UgocuziTURlPp0oRzwkwxY%3d&risl=&pid=ImgRaw&r=0') }}'); background-position: center; background-size: cover; min-height: 100vh; display: flex; align-items: flex-end; padding-left: 30%; padding-bottom: 30px;">

</section>

<!-- Notre objectif -->
<section class="our-goal">
    <div class="left">
        <span>Nos Services</span>
        <h1>DES OBJECTIFS SPÉCIFIQUES POUR VOTRE PARCOURS SERONT DÉTERMINÉS PAR VOUS ET VOTRE CONSEILLER</h1>
        <a href="#">PRENEZ RENDEZ-VOUS</a>
    </div>
    <div class="right">
        <p>Votre réussite académique est notre priorité. Nous travaillons avec vous pour établir des objectifs clairs et atteignables, tout en vous offrant le soutien nécessaire tout au long de votre parcours.</p>
        <p>Chaque étape de votre parcours éducatif est importante. Nous vous aidons à naviguer dans les défis et à saisir les opportunités qui se présentent à vous.</p>
    </div>
</section>
@endsection
