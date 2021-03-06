<?php

namespace CTF\TeamBundle\Entity;

class TeamSelectDTO {
    
    /**
     * @var string
     */
    private $is_selecting;
    
    /**
     * @var \CTF\TeamBundle\Entity\Team
     */
    private $team;
    
    /**
     * @var string
     */
    private $message;
    
    /**
     * 
     * @param string $selecting
     * @return \CTF\TeamBundle\Entity\TeamSelectDTO
     */
    public function setIsSelecting($selecting) {
        $this->is_selecting = $selecting;
        
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getIsSelecting() {
        return $this->is_selecting;
    }
    
    /**
     * 
     * @param \CTF\TeamBundle\Entity\Team $team
     * @return \CTF\TeamBundle\Entity\TeamSelectDTO
     */
    public function setTeam($team) {
        $this->team = $team;
        
        return $this;
    }
    
    /**
     * 
     * @return \CTF\TeamBundle\Entity\Team
     */
    public function getTeam() {
        return $this->team;
    }
    
    /**
     * 
     * @param string $message
     * @return \CTF\TeamBundle\Entity\TeamSelectDTO
     */
    public function setMessage($message) {
        $this->message = $message;
        
        return $this;
    }
    
    /**
     * 
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }
}
