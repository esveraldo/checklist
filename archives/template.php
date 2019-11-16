<?php

$novaSenha = '';

//Verifica se a senha existe
if(isset($senhaCriada)){
    $novaSenha = $senhaCriada;
}

$mensagem = '
<!DOCTYPE html>
<html style="padding: 0px; margin: 0px;" lang="pt_br">
   <head> 
       <meta charset="UTF-8" />
        <style>
           body{margin:
                0;padding: 0;
           }
           @media only screen and (max-width:640px){
               table, img[class="partial-image"]{
                    width:100% !important;
                    height:auto !important;
                    min-width: 200px !important; 
           }
      </style>
   </head>
<body>
<table style="border-collapse: collapse; border-spacing:
   0; min-height: 418px;" cellpadding="0" cellspacing="0" width="100%" bgcolor="#f2f2f2">
   <tbody>
      <tr>
         <td align="center" style="border-collapse: collapse;
            padding-top: 30px; padding-bottom: 30px;">
            <table cellpadding="5" cellspacing="5" width="600" bgcolor="white" style="border-collapse: collapse;
               border-spacing: 0;">
               <tbody>
                  <tr>
                     <td style="border-collapse: collapse; padding: 0px;
                        text-align: center; width: 600px;">
                        <table style="border-collapse: collapse; border-spacing:
                           0; box-sizing: border-box; min-height: 40px;
                           position: relative; width: 100%;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse; font-family:
                                    Arial; padding: 10px 15px; background:
                                    #fff;">
                                    <table width="100%" style="border-collapse: collapse; border-spacing:
                                       0; font-family: Arial;">
                                       <tbody>
                                          <tr>
                                             <td style="border-collapse: collapse;">
                                                <h2>
												<a style="display: inline-block; text-decoration:
                                                   none; box-sizing: border-box; font-family: arial;
                                                   width: 100%; text-align: center; color:
                                                   rgb(102,102,102); font-size: 16px; cursor: text;" target="_blank">
												   
												   <span style="font-weight: normal;
                                                   color: #666;">Acesso Painel de Desenvolvedores
                                                   </span>
												</a>
												   
                                                </h2>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        
						
						
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width: 100%;
                           max-width: 600px; padding-bottom: 0px;
                           padding-left: 0px; padding-right: 0px;
                           padding-top: 0px; text-align: center;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse;
                                    font-family: Arial; padding: 0px; line-height:
                                    0px; mso-line-height-rule: exactly;">
                                    <table width="100%" style="border-collapse: collapse;
                                       border-spacing: 0; font-family: Arial;">
                                       <tbody>
                                          <tr>
                                             <td align="center" style="border-collapse:
                                                collapse; line-height: 0px; padding: 0;
                                                mso-line-height-rule: exactly;"><a target="_blank" style="display: block; text-decoration: none;
                                                box-sizing: border-box; font-family: arial; width:
                                                100%;"><img class="partial-image" width="180" style="box-sizing: border-box;
                                                display: block; max-width: 600px; min-width:
                                                160px;" 
												dfsrc="http://prixpay.com/painel_prixpay/img/logo-login.png" 
												src="http://prixpay.com/painel_prixpay/img/logo-login.png"></a></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        
						
						
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width: 100%;
                           font-family: Arial; font-size: 25px;
                           padding-bottom: 20px; padding-top: 20px;
                           text-align: center; vertical-align:
                           middle;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse; font-family:
                                    Arial; padding: 10px 15px;">
                                    <table width="100%" style="border-collapse: collapse; border-spacing:
                                       0; font-family: Arial;">
                                       <tbody>
                                          <tr>
                                             <td style="border-collapse: collapse;">
                                                <h2 style="font-weight: normal; margin: 0px; padding:
                                                   0px; color: #666; word-wrap: break-word;"><a style="display: inline-block; text-decoration:
                                                   none; box-sizing: border-box; font-family: arial;
                                                   width: 100%; font-size: 25px; text-align: center;
                                                   word-wrap: break-word; color: rgb(102,102,102);
                                                   cursor: text;" target="_blank"><span style="font-size: inherit; text-align: center;
                                                   width: 100%; color: #666;">Seu login é o seu e mail e sua senha: </span></a>
                                                </h2>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width:
                           100%;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse:
                                    collapse; font-family: Arial; padding: 10px
                                    15px;">
                                    <table width="100%" style="border-collapse: collapse; border-spacing:
                                       0; text-align: left; font-family:
                                       Arial;">
                                       <tbody>
                                          <tr>
                                             <td style="border-collapse:
                                                collapse;">
                                                <div style="font-family: Arial;
                                                   font-size: 15px; font-weight: normal; line-height:
                                                   170%; text-align: left; color: #666; word-wrap:
                                                   break-word;">
                                                   <div style="text-align:
                                                      center;">
													  
													  
													  <h2 style="color: #00BFFF;">
													  Senha: '.$novaSenha.'
													  </h2>
													  
													  <span style="line-height: 0;
                                                         display: none;"></span><span style="line-height:
                                                         0; display:
                                                         none;"></span>
                                                   </div>
                                                </div>
												
												
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
						<!--
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width: 100%;
                           padding-bottom: 10px; padding-top: 10px;
                           text-align: center;">
                           <tbody>
                              <tr>
								
                                 <td style="border-collapse: collapse; font-family:
                                    Arial; padding: 10px 15px;">
                                    <div style="font-family: Arial; text-align:
                                       center;">
									   
                                       <table style="border-collapse:
                                          collapse; border-spacing: 0; background-color:
                                          rgb(64,190,255); border-radius: 10px; color:
                                          rgb(255,255,255); display: inline-block;
                                          font-family: Arial; font-size: 15px; font-weight:
                                          bold; text-align: center;">
                                          <tbody style="display:
                                             inline-block;">
                                             <tr style="display:
                                                inline-block;">
												
                                                <td align="center" style="border-collapse: collapse; display:
                                                   inline-block; padding: 15px 20px;">
												   
												   <a href="./"
												   target="_blank" style="display: inline-block;
                                                   text-decoration: none; box-sizing: border-box;
                                                   font-family: arial; color: #fff; font-size: 15px;
                                                   font-weight: bold; margin: 0px; padding: 0px;
                                                   text-align: center; word-wrap: break-word; width:
                                                   100%; cursor: point;">Acessar Prixpay</a>
												   
                                                </td>
												
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </td>
								 
                              </tr>
                           </tbody>
                        </table>
                        -->
						
						<table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width:
                           100%;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse:
                                    collapse; font-family: Arial; padding: 10px
                                    15px;">
                                    <table width="100%" style="border-collapse: collapse; border-spacing:
                                       0; text-align: left; font-family:
                                       Arial;">
                                       <tbody>
                                          <tr>
                                             <td style="border-collapse:
                                                collapse;">
                                                <div style="font-family: Arial;
                                                   font-size: 15px; font-weight: normal; line-height:
                                                   170%; text-align: left; color: rgb(120,113,99);
                                                   word-wrap: break-word;">
                                                   <div style="text-align:
                                                      center; color: rgb(120,113,99);"><span style="line-height: 0; display: none; color:
                                                      rgb(120,113,99);"></span>
													  Click abaixo
                                                   </div>
                                                   <!--<a style="text-align: center;display:block;
                                                      color: rgb(120,113,99);" href="callto:(21) 2222-2222">(51) 3086-0262
                                                    </a>-->
                                                       <a style="text-align: center;display:block; color:
                                                      rgb(120,113,99);" href="https://prixpay.com/painel_dev">
														Acesso ao Painel
                                                       </a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
						
						
						
						
						
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width:
                           100%;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse:
                                    collapse; font-family: Arial; padding: 10px
                                    15px;">
                                    <table width="100%" style="border-collapse: collapse; border-spacing:
                                       0; text-align: left; font-family:
                                       Arial;">
                                       <tbody>
                                          <tr>
                                             <td style="border-collapse:
                                                collapse;">
                                                <div style="font-family: Arial;
                                                   font-size: 15px; font-weight: normal; line-height:
                                                   170%; text-align: left; color: rgb(120,113,99);
                                                   word-wrap: break-word;">
                                                   <div style="text-align:
                                                      center; color: rgb(120,113,99);"><span style="line-height: 0; display: none; color:
                                                      rgb(120,113,99);"></span>Em caso de dúvida, entre em
                                                      contato!
                                                   </div>
                                                   <!--<a style="text-align: center;display:block;
                                                      color: rgb(120,113,99);" href="callto:(21) 2222-2222">(51) 3086-0262
                                                    </a>-->
                                                       <a style="text-align: center;display:block; color:
                                                      rgb(120,113,99);" href="mailto:contato@prixpay.com">
                                                       contato@prixpay.com
                                                       </a>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <table style="border-collapse: collapse;
                           border-spacing: 0; box-sizing: border-box;
                           min-height: 40px; position: relative; width: 100%;
                           padding: 30px 0px; text-align: center;">
                           <tbody>
                              <tr>
                                 <td style="border-collapse: collapse;
                                    font-family: Arial; padding: 10px 15px;">
                                    <table width="100%" style="border-collapse: collapse;
                                       border-spacing: 0; font-family: Arial;">
                                       <tbody>
                                          <tr>
                                             <td align="center" style="border-collapse:
                                                collapse;">
                                                 <a href="http://www.facebook.com" target="_blank" style="display: inline-block;
                                                text-decoration: none; box-sizing: border-box;
                                                font-family: arial; width: auto!important;">      
                                                &nbsp;
												
												<!--
                                                <img style="height: auto; width: 30px;" dfsrc="http://imgnode1.iagentecorp.com/iagentemail/drag-drop/facebook.png" src="http://imgnode1.iagentecorp.com/iagentemail/drag-drop/facebook.png">               
                                                &nbsp;                             
                                                </a>
                                                <a href="http://www.twitter.com" target="_blank" style="display: inline-block;
                                                   text-decoration: none; box-sizing: border-box;
                                                   font-family: arial; width: auto!important;">      
                                                &nbsp;                    
                                                <img style="height: auto; width: 30px;" dfsrc="http://imgnode1.iagentecorp.com/iagentemail/drag-drop/twitter.png" src="http://imgnode1.iagentecorp.com/iagentemail/drag-drop/twitter.png"> 
												-->
												
                                                &nbsp;                             
                                                </a>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
</body>
</html>
';
?>