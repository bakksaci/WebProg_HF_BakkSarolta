<?php

class Student
{
    private string $name;
    private string $studentNumber;
    private array $grades = [];

    public function __construct(string $name, string $studentNumber)
    {
        $this->name = $name;
        $this->studentNumber = $studentNumber;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStudentNumber(): string
    {
        return $this->studentNumber;
    }

    public function setStudentNumber(string $studentNumber): void
    {
        $this->studentNumber = $studentNumber;
    }



    public function setGrade(Subject $subject, float $grade): void
    {
        $this->grades[$subject->getCode()] = $grade;
    }

    public function getAvgGrade(): ?float
    {
        $gradeCount = count($this->grades);
        if ($gradeCount === 0) {
            return null; // Nincsenek jegyek
        }
        
        $sum = array_sum($this->grades);
        return $sum / $gradeCount;
    }

    public function printGrades(): void
    {
        foreach ($this->grades as $subjectCode => $grade) {
            echo $subjectCode . ' - ' . $grade . "\n";
        }
    }
}