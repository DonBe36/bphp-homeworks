<?php
class Users extends JsonDataArray
{
    public function displaySortedList()
    {
        parent::newQuery();
        parent::orderBy('name');
        $this->list = parent::getObjs();
        $count = count($this->list);
        for ($i = 0; $i < $count; $i++) {
            $name = $this->list[$i]['name'];
            $email = $this->list[$i]['email'];
            $rate = $this->list[$i]['rate'];
            echo "<div class=\"name\">$name</div>
            <div class=\"data\">e-mail: $email</div>
            <div class=\"data\">rate: $rate</div>";
        }
    }
}