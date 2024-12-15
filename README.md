# PHP Loose vs Strict Comparison Pitfall

This example highlights a common pitfall in PHP related to loose versus strict comparison.  Loose comparison (`==`) can lead to unexpected behavior when comparing values of different types, while strict comparison (`===`) ensures type and value equality. The example demonstrates how a seemingly correct function can produce incorrect results due to the use of loose comparison.  The solution showcases how strict comparison resolves this issue, improving code reliability.