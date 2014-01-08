<?php
namespace Fluzo\ContactBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "4",
     *      max = "50" 
     * )
     */
    protected $name;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Email()
     * @Assert\Length(
     *      min = "5",
     *      max = "120"
     * )     
     */
    protected $email;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "2",
     *      max = "150"
     * )
     */
    protected $subject;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = "10",
     *      max = "5000"
     * )
     */
    protected $message;        

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message)
    {
        $this->message = $message;
    }
}
