<?php
// model/session.php
/**
 * @Entity @Table(name="sessions")
 **/
class Session
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
  
    /** @Column(type="string") **/
    protected $name;
  
    /** @Column(type="boolean") **/
    protected $isPrivate;
  
    /** @Column(type="datetime") **/ 
    protected $lastAction;
    
    /** @OneToMany(targetEntity="Member", mappedBy="session") **/
    protected $members;
  
    /** @OnToMany(targetEntity="Poll", mappedBy="session") **/
    protected $polls;
  
    public function getId()
    {
    	  return $this->id;
    }
  
    // Getter and setter for name field
    public function getName()
    {
    	  return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
  
    // Getter and setter for isPrivate field
    public function getIsPrivate()
    {
    	  return $this->isPrivate;
    }
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    }

    // Getter and setter for lastAction field
    public function getLastAction()
    {
    	  return $this->lastAction;
    }
    public function setLastAction($lastAction)
    {
        $this->lastAction = $lastAction;
    }
  
    // Getter and setter for members association
    public function getMembers()
    {
    	  return $this->members;
    }
    
    // Getter and setter for members association
    public function getPolls()
    {
    	  return $this->polls;
    }
}