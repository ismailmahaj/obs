@if(isset($events[0]))
    <div class="container" id="evenements" >
        <div class="row espace">
            <h1>{{ trans('sections.evenements')}}</h1>
            <div class="col-md-8 col-md-offset-2">
              <?php $count = 0; ?>
                @foreach($events as $event)
                    <div class="modal fade" id="evenementsModal<?php echo $count; ?>" 
                        tabindex="-1" role="dialog" 
                        aria-labelledby="evenementsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                    <h4 class="modal-title" 
                                    id="evenementsModalLabel">{{ $event->titre }}</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <div class="col-md-7 affiche">
                                        <img class="img-responsive" src="{{ url('/storage/' . $event->lien_image) }}">
                                    </div>
                                    
                                    <?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1'); ?>
                                    <span class="jaune">Date :</span> {{ date('d',strtotime($event->date)) }}
                                    {{ strftime('%B',strtotime($event->date))}} à {{ date('G',strtotime($event->date)) }}h
                                    <br>
                                    <span class="jaune">Lieu :</span> {{ $event->lieu }}
                                    <br>
                                    <span class="jaune">Adresse :</span> {{ $event->adresse }}
                                    <br>
                                    <br>
                                    <span class="jaune">Description :</span>
                                    {{ $event->description }}
                                
                                </div>
                                <div class="modal-footer">
                                    
                                        <a target="_blank" href="http://{{ $event->lien_billetterie }}">
                                        <button type="button" class="btn btn-default bouton-event-infos" data-toggle="modal" data-target="#evenementsModal<?php echo $count; ?>" >
                                        Acheter les tickets</button>
                                        </a>
                                    
                                    
                                        <button type="button" class="btn btn-default bouton-event-infos" data-dismiss="modal">Fermer</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row event">
                    <div class="row">
                        <div class="col-md-2 jour">{{ date('d',strtotime($event->date)) }}
                        <div class="mois">{{ strftime('%B',strtotime($event->date))}}</div></div>

                        <div class="col-md-4">{{$event->lieu}}
                        <?php setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1'); ?>
                        
                        <div class="infos">{{ date('G',strtotime($event->date)) }}h / {{ $event->adresse }}</div></div>

                        <div class="col-md-4 col-md-offset-2"><button type="button" class="btn btn-default bouton-event-infos" data-toggle="modal" data-target="#evenementsModal<?php echo $count; ?>" >Plus d'infos</button></div>

                    </div>
                    
                    
                </div>

                
                <?php $count++; ?>
                @endforeach
            </div>
        </div>
    </div>
@endif