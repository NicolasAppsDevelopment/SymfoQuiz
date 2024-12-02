<?php

namespace App\Entity;

use App\Repository\UserQuizzAttemptRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserQuizzAttemptRepository::class)]
class UserQuizzAttempt
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quizId = null;

    #[ORM\Column]
    private ?int $userId = null;

    #[ORM\Column]
    private ?bool $finished = null;

    #[ORM\Column]
    private ?int $score = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $playedDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuizId(): ?int
    {
        return $this->quizId;
    }

    public function setQuizId(int $quizId): static
    {
        $this->quizId = $quizId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): static
    {
        $this->userId = $userId;

        return $this;
    }

    public function isFinished(): ?bool
    {
        return $this->finished;
    }

    public function setFinished(bool $finished): static
    {
        $this->finished = $finished;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(int $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getPlayedDate(): ?\DateTimeInterface
    {
        return $this->playedDate;
    }

    public function setPlayedDate(\DateTimeInterface $playedDate): static
    {
        $this->playedDate = $playedDate;

        return $this;
    }
}
