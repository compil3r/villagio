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
   <section aria-label="contact" class="whitepage pt-0">
    <div class="container-fluid m-5-hor">
      <div class="row">
      
        <div class="col-md-8">
            <form id="form-contact1" class="contato">
                        <div class="form-group">
                            <input type="text" class="form-control" required="" id="name-contact-1" placeholder="Seu nome">
                        </div>

                        <div class="row">
                          <div class="form-group col-md-7">
                            <input type="email" class="form-control" required="" id="email-contact" placeholder="Seu e-mail">
                        </div> 

                        {{-- telefone --}}
                        <div class="form-group col-md-5">
                            <input type="text" class="form-control" required="" id="telefone" placeholder="Seu telefone">
                        </div>
                        </div>

                        {{-- cidade e estado --}}
                        <div class="row">
                          <div class="form-group col-md-8">
                            <input type="text" class="form-control" required="" id="cidade" placeholder="Sua cidade">
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" required="" id="estado" placeholder="Seu estado">
                        </div>
                        </div>
                        
                      
                        <div class="form-group">
                          <select name="enviarPara" class="form-control">
                            <option value="0">Selecione um departamento</option>
                            <option value="1" data-email="manutencao@villaggioaluminios.com.br">Assistência Técnica</option> 
                            <option value="6" data-email="contato@villaggioaluminios.com.br">Atendimento</option>
                            <option value="2" data-email="comercial4@villaggioaluminios.com.br">Comercial</option>
                            <option value="6" data-email="faturamento@villaggioaluminios.com.br">Faturamento</option>
                            <option value="5" data-email="financeiro@villaggioaluminios.com.br">Financeiro</option>
                            <option value="3" data-email="marketing@villaggioaluminios.com.br">Marketing</option>
                            <option value="4" data-email="rh@villaggioaluminios.com.br">RH</option>
                           
                          
                          </select>
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
                Rua Vale das Palmeiras, 3250 <br> Colônia Japonesa | Ivoti | RS</span> 
                <span>(51) 3563-9600 | (51) 99917-0230</span> 
                <span><a href="mailto:contato@villaggioaluminios.com.br"> contato@villaggioaluminios.com.br</a></span> 
            
              </address>

              <div class="icon-localizacao eut-hover-effect">
                <i class="ti-location-pin">
                </i>
              </div>

              <div class="trabalheConosco">
                <h2>Trabalhe Conosco</h2>
                {{-- enviar para rh@villaggioaluminios.com.br --}}
                {{-- link to open modal --}}
                <a href="#" data-toggle="modal" data-target="#modalTrabalheConosco">Anexe aqui seu currículo</a>
              </div>
          </div>
          <!-- address end -->
        
        
      </div>
    </div>
  </section>
  <!-- section contact end -->
@endsection

{{-- modal trabalhe conosco --}}
@section('modal')
<!-- Modal -->
<div class="modal fade" id="modalTrabalheConosco" tabindex="-1" role="dialog" aria-labelledby="modalTrabalheConoscoLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTrabalheConoscoLabel">Trabalhe Conosco</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-contact1" class="contato">
          <div class="form-group
          ">
              <input type="text" class="form-control" required="" id="name-contact-1" placeholder="Seu nome">
          </div>
          {{-- file --}}
          <div class="form-group">
            <input type="file" class="form-control" required="" id="file" placeholder="Seu arquivo">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- scripts --}}
