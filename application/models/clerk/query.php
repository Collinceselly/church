SELECT '*'
FROM `children_members_records`
FULL JOIN adults_members_records ON adults_members_records.ID_CARD_NUMBER = children_members_records.FATHER_IDNO;


SELECT 'TOTAL_AMOUNT'
FROM givings_records
WHERE givings_records.SABBATH_DATE = '2018-08-04' AND givings_records.GIVINGS_FK = '1';