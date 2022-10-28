@extends('layout_fixo')

@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep text-center" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title">
                    <h2>Fale Conosco</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <!-- section contact -->
   <section aria-label="contact" class="whitepage">
    <div class="container-fluid m-5-hor">
      <div class="row">
      
        <div class="col-md-8">
            <form id="form-contact1">
                        <div class="form-group user-name">
                            <input type="text" class="form-control" required="" id="name-contact-1" placeholder="Seu nome">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" required="" id="email-contact" placeholder="Seu e-mail">
                        </div>
                    
                        <div class="form-group user-message">
                            <textarea class="form-control" required="" id="message-contact" placeholder="Sua mensagem"></textarea>
                            <div class="success" id="mail_success">Obrigado, sua mensagem foi enviada.</div>
                            <div class="error" id="mail_failed">Erro! E-mail não enviado.</div>
                        </div>
                <button type="submit" id="send-contact-1" class="btn-contact">Enviar Agora</button>
            </form>
        </div>
        
        <!-- address -->
          <div class="col-md-3 col-md-offset-1">
            <h3 class="heading-cont">Informação de Contato</h3>
              <address class="cont-1">
                <span>
                Rua Vale das Palmeiras, 3250 - Colônia Japonesa, Ivoti, RS</span> 
                <span><strong>TEL:</strong> (51) 99999-9999</span> 
                <span><strong>EMAIL:</strong><a href="mailto:contato@villaggio.com.br"> contato@villaggio.com.br</a></span> 
                
              </address>
          </div>
          <!-- address end -->
        
        
      </div>
    </div>
  </section>
  <!-- section contact end -->
@endsection
