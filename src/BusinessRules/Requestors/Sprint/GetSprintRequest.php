<?php

namespace BusinessRules\Requestors\Sprint;

use OpenClassrooms\UseCase\BusinessRules\Requestors\UseCaseRequest;

/**
 * @author Romain Kuzniak <romain.kuzniak@turn-it-up.org>
 */
interface GetSprintRequest extends UseCaseRequest
{
    /**
     * @return int
     */
    public function getSprintId();
}
