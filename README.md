# How to Run the Script

## Prerequisites
- Minimum PHP version 8.3.0

## Steps
1. Open your command line interface (CLI).
2. Navigate to the directory where the script.php file is located.
3. Run the script using the following command:
    ```bash 
    php script.php [participants] [type] [sender]
   ```
   or

   ```bash
   php script.php [participants] [type]
   ```
   
   Replace [participants], [type], and [sender] with appropriate values:
   - [participants]: Number of participants (integer) ranging from 0 to 8.
   - [type]: Type of activity, choose from ["education", "recreational", "social", "diy", "charity", "cooking", "relaxation", "music", "busywork"].
   - [sender]: Method of sending message, choose from ["file", "console"]. It is possible to leave it blank - then the "console" option will be the default
   
## Example
To run the script for 4 participants for a social activity, and display the recommendation in the console, use the following command:

```bash 
    php script.php 4 social console
   ```
   or

   ```bash
   php script.php 4 social
   ```
