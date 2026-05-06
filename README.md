# onyx-sec-policy-vault

`onyx-sec-policy-vault` is a PHP project in security tooling. Its focus is to implement a PHP security tooling project for policy protocol validation, using framed sample traffic and bounds and ordering tests.

## Problem It Tries To Make Smaller

This is intentionally local and self-contained so it can be inspected without credentials, services, or seeded history.

## Onyx Sec Policy Vault Review Notes

The first comparison I would make is `policy width` against `claim drift` because it shows where the rule is most opinionated.

## Working Pieces

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/onyx-sec-policy-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `claim drift`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## Design Notes

The core code exposes a scoring path and the added review layer uses `signal`, `slack`, `drag`, and `confidence`. The domain terms are `trust boundary`, `claim drift`, `replay exposure`, and `policy width`.

The PHP code keeps the review rule close to the tests.

## Example Run

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Tests

That command is also the regression path. It verifies the domain cases and catches mismatches between the CSV, metadata, and code.

## Known Limits

No external service is required. A deeper version would add more negative cases and a clearer boundary around invalid input.
