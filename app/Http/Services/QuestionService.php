<?php

namespace App\Http\Services;

use App\Models\QuestionGroup;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use Illuminate\Support\Collection;

class QuestionService extends BaseService
{
    /**
     * @param QuestionRepositoryInterface $repository
     */
    public function __construct(QuestionRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }

    /**
     * @param QuestionGroup $questionGroup
     * @param int|null $number
     * @return Collection
     */
    public function getQuestionsWithResponsesByQuestionGroupId(QuestionGroup $questionGroup, ?int $number = null): Collection
    {
        $questions = $this->repository->with('question_response')->where(['question_group_id' => $questionGroup->id]);
        if ($number) $questions = $questions->random($number);
        return $questions;
    }

    /**
     * @param string $questionGroupId
     * @param int|null $number
     * @return Collection
     */
    public function getRandomQuestionsKeysByQuestionGroupId(string $questionGroupId,?int $number = null): Collection
    {
        $number != null
        ? $questions = $this->repository->where(['question_group_id' => $questionGroupId])->random($number)->keyBy('id')->keys()
        : $questions = $this->repository->where(['question_group_id' => $questionGroupId])->keyBy('id')->keys();

        return $questions;
    }

    /**
     * @param Collection $questions
     * @return string
     */
    public function turnQuestionsToSlug(Collection $questions): string
    {
         $slug = "";
         foreach ($questions as $question)
         {
             $slug.="questions[]=".$question->id;
             if($question->id != $questions->last()->id)
                 $slug.="&";
         }

         return $slug;
    }

    /**
     * @param Collection $questionsIds
     * @return Collection
     */
    public function getQuestionsWithResponsesByIds(Collection $questionsIds): Collection
    {
        return $this->repository->whereIn(['id', $questionsIds->toArray()['questions']])->with('question_response')->get();
    }

    /**
     * @param string $id
     * @return Collection
     */
    public function getQuestionsByUserTakenExaminationIdQuestionGroupId(string $examination_id, string $question_group_id): Collection
    {
        return $this->repository->whereHas(['userExamination' => $examination_id, 'question_group' => $question_group_id]);
    }
}
