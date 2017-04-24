<?php
namespace App\Controller;

use App\Controller\AppController;
class ContactController extends AppController
{
    /*
    * Exibe e processa o formulário de contato caso seja uma requisição post
    * @return void\Response
    */
    public function index()
    {
        $contact = new ContactForm();
        if ($this->request->is('post')) {
            if ($contact->execute($this->request->data)) {
                $this->Flash->success('Mensagem enviado, aguarde nosso retorno.');
            } else {
                $this->Flash->error('Ocorreu um problema ao enviar sua mensagem.');
            }
        }
        $this->set('contact', $contact);
    }
}