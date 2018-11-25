# Sobre O Helpers:
O Helper server para você formata o ***time();*** em time passado...

***Exemplo:*** Time hoje (24/11/2018 - 22:12 GMT-3) é ***1543108376*** ficará **"Agora mesmo..."** e se passa minutos, horas, dias e etc... <br />
ficara: ***1 hora atrás*** (exemplo).

# Como ativar?
Vocè pode esta ativando a toda aplicação no arquivo ***autoload.php***, que se encontrar na pasta ***seucodeigniter/application/config/autoload.php*** <br />
Procurar por ***$autoload["helper"]***, e acrescente ***'formattime'*** no mesmo, como no print abaixo: <br />
<img style="border:2px solid red;" src="https://i.imgur.com/C9X0jIe.png" /><br />
ou acrescente no seu codigo PHP: ***$this->load->helper('formattime');*** (Obs.: so está ativando para a função atual).

# Como usar?
Use FormatTime(); nas string.

***Exemplo - Pratico:*** <br />
Você receberá do seu banco de dados o time(); - (por exemplo: 1543108376); <br />
$string_que_recebe = '1543108376'; <br />
$string_formatado = FormatTime($string_que_recebe); <br />
***Resultado: Vai mostra conforme quanto tempo depois você (ou vistantes) vai visualizar seu conteudo.*** <br />
