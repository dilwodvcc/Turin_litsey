<?php

namespace App\Models;

use App\Models\DB;
use PDO;

class Question extends DB
{
    public function create(int $quiz_id, string $question_text): int
    {
        $query = "INSERT INTO questions (quiz_id,question_text, updated_at, created_at) 
            VALUES (:quiz_id,:question_text, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":quiz_id" => $quiz_id,
            ":question_text" => $question_text,
        ]);
        return $this->conn->lastInsertId();
    }
    public function deleteByQuizId(int $quizId): bool
    {
        $query = "DELETE FROM questions WHERE quiz_id = :quiz_id";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            ":quiz_id" => $quizId
        ]);
    }
    public function getWithOptions(int $quizId): array
    {
        $stmt = $this->conn->prepare("SELECT * FROM questions WHERE quiz_id = :quizId");
        $stmt->execute(['quizId' => $quizId]);
        $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Extract question IDs
        $questionIds = array_column($questions, 'id');
        $placeholders = rtrim(str_repeat('?,', count($questionIds)), ',');

// Fetch options
        $query = "SELECT * FROM options WHERE question_id IN ($placeholders)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($questionIds);
        $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Organize options by question_id
        $groupedOptions = [];
        foreach ($options as $option) {
            $groupedOptions[$option['question_id']][] = $option;
        }

// Add options to questions
        foreach ($questions as &$question) {
            $question['options'] = $groupedOptions[$question['id']] ?? [];
        }

        return $questions;
    }
}