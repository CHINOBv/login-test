# Model entity relation

# Users

# Tasks

| type | field |
| --- | --- |
| PK | id |
| varchar | name |
| varchar | email |
| varchar | hashed | password |
| varchar | phone |
| varchar | address |
| time_stamp | times |

# Relation

| type | field |
| --- | --- |
| PK | id |
| foreign_key | user_id |
| varchar | title |
| varchar | content |
| boolean | completed |
| time_stamp | times |

![Untitled Diagram (1).jpg](Model%20entity%20relation%2030d113e47db24a0b87a483fe0d9b2a74/Untitled_Diagram_(1).jpg)