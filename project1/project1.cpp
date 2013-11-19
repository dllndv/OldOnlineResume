/***********************************************************************
* Program:
*    Project 1, Procedural Chess
*    Brother Helfrich, CS165
* Author:
*    Dallen Loder
* Summary: 
*    This is a program that will allow two users (or one schitzophrenic)
*    to play chess. The rules are not all enforced at this point in
*    time, as the purpose of this project is to demonstrate mastery of
*    proceedural programming before moving on to much bigger, and much,
*    much better things.    
*
*    Estimated:  4.0 hrs   
*    Actual:     6.0 hrs
*    	Actually the most diffucult part of the program was figuring out
*    how to get the <censored> thing to exit when you press enter. I 
*    wasted more time on that than any other component of this program.
************************************************************************/
#include <iostream>
#include <fstream>
#include <string>
#include <vector>
#include <stdlib.h>
using namespace std;

// get my #defines for the pieces
#define WHITE_WHITE "\E[31;47m"
#define WHITE_BLACK "\E[30;47m"
#define BLACK_WHITE "\E[37;41m"
#define BLACK_BLACK "\E[30;41m"

//structures for within the structure
struct source
{
	int r;
	int c;
};

struct destination
{
	int r;
	int c;
};

//structure to hold the move
struct Move
{
	string text;
	char piece;
	source src;
	destination dest;
	bool capture;
	bool castleK;
	bool castleQ;
};

void initialize(char board[][8]);
void display(char board[][8], bool simple);
void read(vector<string> & moves, char board[][8], bool simple);
void interact(vector<string> & moves, char board[][8]);
inline bool parse(Move & move, char board[][8], string & errorMessage);
void executeMove(Move & move, char board[][8]);
void write(vector<string> & moves);
inline void displayOptions();


/**********************************************************************
 * MAIN
 *    This will be a driver that will propel all the other functions
 *    in this program        
 ***********************************************************************/
int main()
{
	// create the vector for holding all our moves
	vector<string> moves;
	// create the board
	char board[8][8];
	// put all the right starting values into the board
	initialize(board);
	// display the board
	display(board, false);
	//then hand the controls over to the user
	interact(moves, board);
	return 0;
}

/**********************************************************************
 * INITIALIZE
 *    This will display the board as it starts out, fresh and clean so 
 *    the user has a nice new game to play.
 ***********************************************************************/
void initialize(char board[][8])
{
	// white pieces
	board[0][0] = 'r';
	board[0][1] = 'n';
	board[0][2] = 'b';
	board[0][3] = 'q';
	board[0][4] = 'k';
	board[0][5] = 'b';
	board[0][6] = 'n';
	board[0][7] = 'r';

	for(int c = 0; c <= 7; c++)
		board[1][c] = 'p';
	
	// empty spaces
	for(int r = 2; r <= 5; r++)
		for(int c = 0; c <= 7; c++)
			board[r][c] = ' ';

	// black pieces
	for(int c = 0; c <= 7; c++)
		board[6][c] = 'P';

	board[7][0] = 'R';
	board[7][1] = 'N';
	board[7][2] = 'B';
	board[7][3] = 'Q';
	board[7][4] = 'K';
	board[7][5] = 'B';
	board[7][6] = 'N';
	board[7][7] = 'R';
}

/**********************************************************************
 * DISPLAY
 *    Pretty straightforward, this will display the current board 
 *    configuration to the screen.        
 ***********************************************************************/
void display(char board[][8], bool simple)
{
	// clear the screen first
	system ("clear");

	// declare variables
	bool blackSquare;
	bool blackPiece;
	char tempPiece;

	// only display the simple version if that's all the user wants
	if (simple)
	{
		cout << "  ";
		for (char c ='a'; c <= 'h'; c++)
			cout << c;

		cout << endl;
		// cycle through and display the board
		for (int r = 7; r >= 0; r--)
		{
			cout << r + 1 << " ";
			for (int c = 0; c <= 7; c++)
				cout << board[r][c];
			cout << endl;
		}
	}
	else
	{
		cout << "  ";

		for (char c ='a'; c <= 'h'; c++)
			cout << ' ' << c << ' ';

		cout << endl;

		// display the fancy board
		for (int r = 7; r >= 0; r--)
		{
			cout << r + 1 << " ";
			for (int c = 0; c <= 7; c++)
			{
				// check if its a white piece on a black square, etc
				blackSquare = (r + c) % 2;
				tempPiece = board[r][c];
				blackPiece = isupper(tempPiece);
				tempPiece = toupper(tempPiece);
				if (tempPiece == 'P')
					tempPiece = tolower(tempPiece);
				if (!blackSquare && !blackPiece)
					cout << WHITE_WHITE << " " << tempPiece << " \E[0m";
				else if (!blackSquare && blackPiece)
					cout << WHITE_BLACK << " " << tempPiece << " \E[0m";
				else if (blackSquare && !blackPiece)
					cout << BLACK_WHITE << " " << tempPiece << " \E[0m";
				else if (blackSquare && blackPiece)
					cout << BLACK_BLACK << " " << tempPiece << " \E[0m";
			}
			cout << endl;	
		}
	}


	
}

/**********************************************************************
 * READ
 *    This will take in a specified file of the users choosing and,
 *    making sure that it is formatted correctly, will add the coordinates
 *    to the moves vector
 ***********************************************************************/
void read(vector<string> & moves, char board[][8], bool simple)
{
	// declare variables
	bool good = true;
	string errorMessage;

	// get the filename
	string fileName;
	cout << "Filename: ";
	cin  >> fileName;

	// create the fin stream, and handle it if it fails
	ifstream fin(fileName.c_str());
	if (fin.fail())
	{
		cout << "Unable to read file: " << fileName << endl;
		return;
	}

	// one by one, add the moves to the moves vector
	string fileMove;

	while(fin >> fileMove)
	{
		moves.push_back(fileMove);
	}
	
	// iterate through the vector and parse the moves
	vector<string>::iterator p;
	for(p = moves.begin(); p < moves.end(); p++)
	{
		Move tmpMove;
		tmpMove.castleK = false;
		tmpMove.castleQ = false;
		tmpMove.text = *p;
		if(!parse(tmpMove, board, errorMessage))
		{
			cout << "Error parsing file "
				 << fileName
				 << " with move \'"
				 << errorMessage;
			good = false;
		}
		else
		{
			// if they pass the tests, excecute them
			executeMove(tmpMove, board);
			display(board, simple);
		}
	}

	// if things are not good, remove everything that got put into the vector
	if (!good)
	{
		vector<string>::iterator p;
		for(p = moves.begin(); p < moves.end(); p++)
		{
			*p = "";
		}
		initialize(board);
	}

	// close the file
	fin.close();
}

/**********************************************************************
 * DISPLAY OPTIONS
 *    Displays options to the user.
 ***********************************************************************/
inline void displayOptions()
{
	// display all options
	cout << "Options:\n"
		 << " ?      Display these options\n"
		 << " b2b4   Specify a move using the Smith Notation\n"
		 << " read   Read a saved game from a file\n"
		 << " test   Simple display for test purposes\n"
		 << " quit   Leave the game. You will be prompted to save\n";
}

/**********************************************************************
 * INTERACT
 *    This will contain all the interaction with the user during the 
 *    game of chess.
 ***********************************************************************/
void interact(vector<string> & moves, char board[][8])
{
	// declare variables
	string errorMessage;
	string input;
	bool whiteTurn;
	bool simple = false;
	bool quit = false;

	// initiate loop
	do
	{
		// check who's turn it is
		switch (moves.size() % 2)
		{
			case 0:
				cout << "(White): ";
				break;
			case 1:
				cout << "(Black): ";
				break;
			default:
				cout << "Oops";
		}

		// get the user input
		cin >> input;

		// display options so the user knows how to play
		if (input == "?")
			displayOptions();
		// get moves from a file
		else if (input == "read")
			read(moves, board, simple);
		// change to test mode
		else if (input == "test")
		{
			simple = true;
			display(board, simple);
		}
		// quit the game
		else if (input == "quit")
			quit = true;
		// anything else is assumed to be an attempt at making a move
		else
		{
			Move move;
			move.castleK = false;
			move.castleQ = false;
			move.text = input;
			// parse the input
			if (parse(move, board, errorMessage))
			{
				executeMove(move, board);
				display(board, simple);
				moves.push_back(move.text);
			}
			else
			{
				cout << "Error in move \'"
					 << errorMessage
					 << "        Type ? for more options\n";
			}

		}
	} while (quit == false);

	// quit the game and write to a file if the user so chooses
	write(moves);
	return;
}

/**********************************************************************
 * PARSE
 *    A very important function, parse makes sure that the moves being
 *    entered, whether from a user or from a file, are valid and 
 *    playable.
 ***********************************************************************/
inline bool parse(Move & move, char board[][8], string & errorMessage)
{
	// check if the input is in range if I had more time, I would use exceptions
	if (move.text[0] < 'a' || move.text[0] > 'h')
	{
		errorMessage = move.text + "\': Invalid format of source coordinates\n";
		return false;
	}
	if (move.text[1] <  '1'  || move.text[1] >  '8')
	{
		errorMessage = move.text + "\': Invalid format of source coordinates\n";
		return false;
	}
	if (move.text[2] < 'a' || move.text[2] > 'h')
	{
		errorMessage = move.text + "\': Invalid format of destination coordinates\n";
		return false;
	}
	if (move.text[3] <  '1'  || move.text[3] >  '8')
	{		
		errorMessage = move.text + "\': Invalid format of destination coordinates\n";
		return false;
	}
	
	// if and only if there is a fifth option, then use the code to say what it is
	if (move.text.length() == 5)
	{
		switch (move.text[4])
		{
			case 'p':
			case 'n':
			case 'b':
			case 'r':
			case 'q':
			case 'k':
				move.capture = true;
				break;
			case 'c':
				move.castleK = true;
			case 'C':
				move.castleQ = true;
				break;
			default:
				errorMessage = move.text + "\': Unknown promotion piece specification\n";
				return false;
		}
	}

	// add the attributes to the move structure
	move.src.c  = move.text[0] - 'a';
	move.src.r  = (int)(move.text[1] - '1');
	move.dest.c = move.text[2] - 'a';
	move.dest.r = (int)(move.text[3] - '1');

	// once that is done, we can check if the square you're moving from is empty
	if (board[move.src.r][move.src.c] == ' ')
	{
		errorMessage = move.text 
					 + "\': No piece in the source coordinates position\n";
		return false;
	}
	return true;
}

/**********************************************************************
 * MOVE
 *    This function is responsible for taking the moves vector and
 *    modifying the board to reflect the moves made.        
 ***********************************************************************/
void executeMove(Move & move, char board[][8])
{
	// castling
	if (move.castleK)
	{
		board[move.dest.r][7] = ' ';
		board[move.dest.r][6] = 'K';
		board[move.dest.r][5] = 'R';
		board[move.dest.r][4] = ' ';
	}
	else if (move.castleQ)
	{
		board[move.dest.r][0] = ' ';
		board[move.dest.r][1] = ' ';
		board[move.dest.r][2] = 'K';
		board[move.dest.r][3] = 'R';
		board[move.dest.r][4] = ' ';
	}
	// normal moves
	else
	{
		board[move.dest.r][move.dest.c] = board[move.src.r][move.src.c];
		board[move.src.r][move.src.c] = ' ';
	}
}

/**********************************************************************
 * WRITE
 *    When a user is done with their game, they have the option to write
 *    the moves vector containing everything that has happened thus far
 *    in the game, to a file.
 ***********************************************************************/
void write(vector<string> & moves)
{
	// filename variable
	string fileName;

	cout << "To save a game, please specify the filename.\n"
	     << "    To quit without saving a file, just press <enter>\n";
	
	// ignore, then get the input, very important detail
	cin.ignore();
	getline(cin, fileName);
	
	// this took me an hour to find
	if (fileName.empty())
		return;

	// create fout stream
	ofstream fout(fileName.c_str());

	// check if it failed
	if(fout.fail())
	{
		cout << "Could not write to file " << fileName << endl;
		return;
	}

	// write the file
	vector<string>::iterator p;
	for(p = moves.begin(); p < moves.end(); p++)
	{
		fout << *p << ' ';
	}

	// close the file
	fout.close();
	return;
}
